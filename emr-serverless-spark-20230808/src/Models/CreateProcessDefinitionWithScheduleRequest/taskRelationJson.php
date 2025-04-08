<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\Dara\Model;

class taskRelationJson extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $postTaskCode;

    /**
     * @var int
     */
    public $postTaskVersion;

    /**
     * @var int
     */
    public $preTaskCode;

    /**
     * @var int
     */
    public $preTaskVersion;
    protected $_name = [
        'name' => 'name',
        'postTaskCode' => 'postTaskCode',
        'postTaskVersion' => 'postTaskVersion',
        'preTaskCode' => 'preTaskCode',
        'preTaskVersion' => 'preTaskVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->postTaskCode) {
            $res['postTaskCode'] = $this->postTaskCode;
        }

        if (null !== $this->postTaskVersion) {
            $res['postTaskVersion'] = $this->postTaskVersion;
        }

        if (null !== $this->preTaskCode) {
            $res['preTaskCode'] = $this->preTaskCode;
        }

        if (null !== $this->preTaskVersion) {
            $res['preTaskVersion'] = $this->preTaskVersion;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['postTaskCode'])) {
            $model->postTaskCode = $map['postTaskCode'];
        }

        if (isset($map['postTaskVersion'])) {
            $model->postTaskVersion = $map['postTaskVersion'];
        }

        if (isset($map['preTaskCode'])) {
            $model->preTaskCode = $map['preTaskCode'];
        }

        if (isset($map['preTaskVersion'])) {
            $model->preTaskVersion = $map['preTaskVersion'];
        }

        return $model;
    }
}
