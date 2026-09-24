<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListDiagnosisItemsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'instanceId' => 'instanceId',
        'lang' => 'lang',
        'level' => 'level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
