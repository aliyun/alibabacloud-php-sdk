<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody\domains\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody\domains\redirect;

class domains extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $id;

    /**
     * @var listen
     */
    public $listen;

    /**
     * @var redirect
     */
    public $redirect;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'cname' => 'Cname',
        'domain' => 'Domain',
        'id' => 'Id',
        'listen' => 'Listen',
        'redirect' => 'Redirect',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'status' => 'Status',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->listen) {
            $this->listen->validate();
        }
        if (null !== $this->redirect) {
            $this->redirect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toArray($noStream) : $this->listen;
        }

        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toArray($noStream) : $this->redirect;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }

        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
