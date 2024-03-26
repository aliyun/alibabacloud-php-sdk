<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody\domains\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponseBody\domains\redirect;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The CNAME assigned by WAF.
     *
     * >  This parameter is returned only if the value of **CnameEnabled** is true.
     * @example 50fqmu1ci7g0xtiyxnrhgx6qdhmn****.yundunwaf5.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The domain name.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The access ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The listeners.
     *
     * @var listen
     */
    public $listen;

    /**
     * @description The configurations of the forwarding rule.
     *
     * @var redirect
     */
    public $redirect;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfmvtc5z52****
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **1:** The domain name is in a normal state.
     *   **2:** The domain name is being created.
     *   **3:** The domain name is being modified.
     *   **4:** The domain name is being released.
     *   **5:** WAF no longer forwards the traffic of the domain name.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The user ID.
     *
     * @example 130715431409****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'cname'                          => 'Cname',
        'domain'                         => 'Domain',
        'id'                             => 'Id',
        'listen'                         => 'Listen',
        'redirect'                       => 'Redirect',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'status'                         => 'Status',
        'uid'                            => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return domains
     */
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
