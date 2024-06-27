<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperationLogPageListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $newContent;

    /**
     * @var string
     */
    public $oldContent;

    /**
     * @var string
     */
    public $operationSummary;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'clientIp'         => 'clientIp',
        'gmtCreate'        => 'gmtCreate',
        'newContent'       => 'newContent',
        'oldContent'       => 'oldContent',
        'operationSummary' => 'operationSummary',
        'operationType'    => 'operationType',
        'userName'         => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['clientIp'] = $this->clientIp;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->newContent) {
            $res['newContent'] = $this->newContent;
        }
        if (null !== $this->oldContent) {
            $res['oldContent'] = $this->oldContent;
        }
        if (null !== $this->operationSummary) {
            $res['operationSummary'] = $this->operationSummary;
        }
        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientIp'])) {
            $model->clientIp = $map['clientIp'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['newContent'])) {
            $model->newContent = $map['newContent'];
        }
        if (isset($map['oldContent'])) {
            $model->oldContent = $map['oldContent'];
        }
        if (isset($map['operationSummary'])) {
            $model->operationSummary = $map['operationSummary'];
        }
        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
