<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\origins;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\references;
use AlibabaCloud\Tea\Model;

class originPools extends Model
{
    /**
     * @description Whether the origin pool is enabled:
     *
     * - true: Enabled;
     * - false: Disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description ID of the origin pool.
     *
     * @example 1038520525196928
     *
     * @var int
     */
    public $id;

    /**
     * @description Name of the origin pool, unique within a site.
     *
     * @example pool1
     *
     * @var string
     */
    public $name;

    /**
     * @description Information about the origins added to the origin pool.
     *
     * @var origins[]
     */
    public $origins;

    /**
     * @description Domain name assigned to the origin pool, which can be used as the origin address for records under the site.
     *
     * @example pool1.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description Number of load balancers that reference this origin pool.
     *
     * @example 5
     *
     * @var int
     */
    public $referenceLBCount;

    /**
     * @description Reference information for the origin pool. The origin pool is considered referenced when it is configured in a load balancer or set as the origin for a record.
     *
     * @var references
     */
    public $references;

    /**
     * @description ID of the site to which the origin pool belongs.
     *
     * @example 216558609793952
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'origins' => 'Origins',
        'recordName' => 'RecordName',
        'referenceLBCount' => 'ReferenceLBCount',
        'references' => 'References',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->origins) {
            $res['Origins'] = [];
            if (null !== $this->origins && \is_array($this->origins)) {
                $n = 0;
                foreach ($this->origins as $item) {
                    $res['Origins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->referenceLBCount) {
            $res['ReferenceLBCount'] = $this->referenceLBCount;
        }
        if (null !== $this->references) {
            $res['References'] = null !== $this->references ? $this->references->toMap() : null;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Origins'])) {
            if (!empty($map['Origins'])) {
                $model->origins = [];
                $n = 0;
                foreach ($map['Origins'] as $item) {
                    $model->origins[$n++] = null !== $item ? origins::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['ReferenceLBCount'])) {
            $model->referenceLBCount = $map['ReferenceLBCount'];
        }
        if (isset($map['References'])) {
            $model->references = references::fromMap($map['References']);
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
