<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppGroupRequest extends Model
{
    /**
     * @description The online version of the application.
     *
     * @example 1223232
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the application.
     *
     * @example "test"
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the industry. Valid values:
     *
     *   general: general.
     *   ecommerce: e-commerce.
     *   education: education.
     *   esports: electronic sports.
     *   community: content community.
     *
     * @example "ecommerce"
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to verify the application before modification. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'currentVersion'  => 'currentVersion',
        'description'     => 'description',
        'domain'          => 'domain',
        'resourceGroupId' => 'resourceGroupId',
        'dryRun'          => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
