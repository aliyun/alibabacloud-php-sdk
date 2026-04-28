<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeModelApisResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $modelApiId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pathPrefix;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $recordInput;

    /**
     * @var string
     */
    public $recordOutput;

    /**
     * @var string
     */
    public $routeRules;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'category' => 'Category',
        'gmtCreated' => 'GmtCreated',
        'modelApiId' => 'ModelApiId',
        'name' => 'Name',
        'pathPrefix' => 'PathPrefix',
        'protocol' => 'Protocol',
        'recordInput' => 'RecordInput',
        'recordOutput' => 'RecordOutput',
        'routeRules' => 'RouteRules',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->modelApiId) {
            $res['ModelApiId'] = $this->modelApiId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pathPrefix) {
            $res['PathPrefix'] = $this->pathPrefix;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->recordInput) {
            $res['RecordInput'] = $this->recordInput;
        }

        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = $this->recordOutput;
        }

        if (null !== $this->routeRules) {
            $res['RouteRules'] = $this->routeRules;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['ModelApiId'])) {
            $model->modelApiId = $map['ModelApiId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PathPrefix'])) {
            $model->pathPrefix = $map['PathPrefix'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RecordInput'])) {
            $model->recordInput = $map['RecordInput'];
        }

        if (isset($map['RecordOutput'])) {
            $model->recordOutput = $map['RecordOutput'];
        }

        if (isset($map['RouteRules'])) {
            $model->routeRules = $map['RouteRules'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
