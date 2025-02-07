<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Dara\Model;

class codeVersions extends Model
{
    /**
     * @var string
     */
    public $codeDescription;
    /**
     * @var string
     */
    public $codeVersion;
    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'codeDescription' => 'CodeDescription',
        'codeVersion'     => 'CodeVersion',
        'createTime'      => 'CreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }

        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }

        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
