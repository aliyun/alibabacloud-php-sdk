<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifySecurityEventMarkMissIndividuallyRequest extends Model
{
    /**
     * @var string
     */
    public $deleteMarkMissParam;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $insertMarkMissParam;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'deleteMarkMissParam' => 'DeleteMarkMissParam',
        'from' => 'From',
        'insertMarkMissParam' => 'InsertMarkMissParam',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteMarkMissParam) {
            $res['DeleteMarkMissParam'] = $this->deleteMarkMissParam;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->insertMarkMissParam) {
            $res['InsertMarkMissParam'] = $this->insertMarkMissParam;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['DeleteMarkMissParam'])) {
            $model->deleteMarkMissParam = $map['DeleteMarkMissParam'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['InsertMarkMissParam'])) {
            $model->insertMarkMissParam = $map['InsertMarkMissParam'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
