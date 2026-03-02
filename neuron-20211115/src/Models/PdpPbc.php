<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpPbc extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $company;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $developerId;

    /**
     * @var string
     */
    public $gitGroup;

    /**
     * @var string
     */
    public $gitGroupInfo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $snowbergDisplay;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'alias',
        'company' => 'company',
        'companyId' => 'companyId',
        'description' => 'description',
        'developerId' => 'developerId',
        'gitGroup' => 'gitGroup',
        'gitGroupInfo' => 'gitGroupInfo',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'name' => 'name',
        'requestId' => 'requestId',
        'snowbergDisplay' => 'snowbergDisplay',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->company) {
            $res['company'] = $this->company;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->gitGroup) {
            $res['gitGroup'] = $this->gitGroup;
        }

        if (null !== $this->gitGroupInfo) {
            $res['gitGroupInfo'] = $this->gitGroupInfo;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->snowbergDisplay) {
            $res['snowbergDisplay'] = $this->snowbergDisplay;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['company'])) {
            $model->company = $map['company'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['gitGroup'])) {
            $model->gitGroup = $map['gitGroup'];
        }

        if (isset($map['gitGroupInfo'])) {
            $model->gitGroupInfo = $map['gitGroupInfo'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['snowbergDisplay'])) {
            $model->snowbergDisplay = $map['snowbergDisplay'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
