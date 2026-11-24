<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyModelApiResponseBody extends Model
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
    public $gmtModified;

    /**
     * @var string
     */
    public $modelApiId;

    /**
     * @var string
     */
    public $modelMappings;

    /**
     * @var string
     */
    public $modelRouting;

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
    public $requestId;

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
        'gmtModified' => 'GmtModified',
        'modelApiId' => 'ModelApiId',
        'modelMappings' => 'ModelMappings',
        'modelRouting' => 'ModelRouting',
        'name' => 'Name',
        'pathPrefix' => 'PathPrefix',
        'protocol' => 'Protocol',
        'requestId' => 'RequestId',
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

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modelApiId) {
            $res['ModelApiId'] = $this->modelApiId;
        }

        if (null !== $this->modelMappings) {
            $res['ModelMappings'] = $this->modelMappings;
        }

        if (null !== $this->modelRouting) {
            $res['ModelRouting'] = $this->modelRouting;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ModelApiId'])) {
            $model->modelApiId = $map['ModelApiId'];
        }

        if (isset($map['ModelMappings'])) {
            $model->modelMappings = $map['ModelMappings'];
        }

        if (isset($map['ModelRouting'])) {
            $model->modelRouting = $map['ModelRouting'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
