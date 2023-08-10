<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppGroupRequest extends Model
{
    /**
     * @description currentVersion
     *
     * @example 1223232
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the instance.
     *
     * @example "test"
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the industry. Valid values:
     *
     *   GENERAL
     *   ECOMMERCE
     *   IT_CONTENT
     *
     * @example "ecommerce"
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description true
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
