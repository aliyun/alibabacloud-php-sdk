<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The data center in which the data source is deployed.
     *
     * @example test
     *
     * @var string
     */
    public $domain;

    /**
     * @description The indexes.
     *
     * @var string[]
     */
    public $indexes;

    /**
     * @description The time when the full data of the data source was last queried.
     *
     * @example 1718787785
     *
     * @var int
     */
    public $lastFulTime;

    /**
     * @description The name of the data source.
     *
     * @example data_source_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the data source. Valid values: new: The data source is being created. publish: The data source is in the normal state. trash: The data source is being deleted.
     *
     * @example new
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the data source.
     *
     * @example odps
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domain' => 'domain',
        'indexes' => 'indexes',
        'lastFulTime' => 'lastFulTime',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->indexes) {
            $res['indexes'] = $this->indexes;
        }
        if (null !== $this->lastFulTime) {
            $res['lastFulTime'] = $this->lastFulTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['indexes'])) {
            if (!empty($map['indexes'])) {
                $model->indexes = $map['indexes'];
            }
        }
        if (isset($map['lastFulTime'])) {
            $model->lastFulTime = $map['lastFulTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
