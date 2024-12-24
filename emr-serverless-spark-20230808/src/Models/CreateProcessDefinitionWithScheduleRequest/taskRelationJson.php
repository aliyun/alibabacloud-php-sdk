<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\Tea\Model;

class taskRelationJson extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ods batch workflow
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 28************
     *
     * @var int
     */
    public $postTaskCode;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $postTaskVersion;

    /**
     * @description This parameter is required.
     *
     * @example 16************
     *
     * @var int
     */
    public $preTaskCode;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $preTaskVersion;
    protected $_name = [
        'name'            => 'name',
        'postTaskCode'    => 'postTaskCode',
        'postTaskVersion' => 'postTaskVersion',
        'preTaskCode'     => 'preTaskCode',
        'preTaskVersion'  => 'preTaskVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return taskRelationJson
     */
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
