<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PreloadDcdnObjectCachesRequest extends Model
{
    /**
     * @description The acceleration region in which you want to prefetch content. If you do not specify a region, the value overseas is used.
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: global (excluding the Chinese mainland)
     *
     * @example domestic
     *
     * @var string
     */
    public $area;

    /**
     * @description Specifies whether to prefetch content to POPs. Default value: false. Valid values:
     *
     *   **true**: prefetches content to POPs that include L2 POPs.
     *   **false**: prefetches content to L2 POPs or L3 POPs.
     *
     * @example true
     *
     * @var bool
     */
    public $l2Preload;

    /**
     * @description The path of the content that you want to prefetch. Separate multiple URLs with line feed characters (\n) or a pair of carriage return and line feed characters (\r\n).
     *
     * @example example.com/examplefile.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The custom header for prefetch in JSON format.
     *
     * @example {
     * }
     * @var string
     */
    public $withHeader;
    protected $_name = [
        'area'          => 'Area',
        'l2Preload'     => 'L2Preload',
        'objectPath'    => 'ObjectPath',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'withHeader'    => 'WithHeader',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->l2Preload) {
            $res['L2Preload'] = $this->l2Preload;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->withHeader) {
            $res['WithHeader'] = $this->withHeader;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadDcdnObjectCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['L2Preload'])) {
            $model->l2Preload = $map['L2Preload'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['WithHeader'])) {
            $model->withHeader = $map['WithHeader'];
        }

        return $model;
    }
}
