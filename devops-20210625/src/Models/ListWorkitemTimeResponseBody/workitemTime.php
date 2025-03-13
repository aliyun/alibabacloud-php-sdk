<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponseBody;

use AlibabaCloud\Tea\Model;

class workitemTime extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $actualTime;

    /**
     * @example 开发代码等
     *
     * @var string
     */
    public $description;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtEnd;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1653235200000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example a4ac3a81e90217db32b7......
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 1967043931......
     *
     * @var string
     */
    public $recordUser;

    /**
     * @example 研发
     *
     * @var string
     */
    public $type;

    /**
     * @example 5daa9a15c7fd55523996......
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'actualTime'         => 'actualTime',
        'description'        => 'description',
        'gmtCreate'          => 'gmtCreate',
        'gmtEnd'             => 'gmtEnd',
        'gmtModified'        => 'gmtModified',
        'gmtStart'           => 'gmtStart',
        'identifier'         => 'identifier',
        'recordUser'         => 'recordUser',
        'type'               => 'type',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['actualTime'] = $this->actualTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->recordUser) {
            $res['recordUser'] = $this->recordUser;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workitemTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualTime'])) {
            $model->actualTime = $map['actualTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['recordUser'])) {
            $model->recordUser = $map['recordUser'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
