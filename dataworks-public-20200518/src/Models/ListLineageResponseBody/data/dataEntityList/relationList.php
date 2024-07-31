<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data\dataEntityList;

use AlibabaCloud\Tea\Model;

class relationList extends Model
{
    /**
     * @description The data channel. Valid values:
     *
     * FIRST_PARTY: DataWorks platformTHIRD_PARTY: user registration
     * @example THIRD_PARTY
     *
     * @var string
     */
    public $channel;

    /**
     * @description The name of the data source.
     *
     * @example mysql
     *
     * @var string
     */
    public $datasource;

    /**
     * @description The unique relationship ID.
     *
     * @example aaabbccddguid
     *
     * @var string
     */
    public $guid;

    /**
     * @description The task type, which is used to describe the relationship between entities, such as SQL-based calculation, mapping based on report fields, or API operation definition.
     *
     * @example sql
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channel'    => 'Channel',
        'datasource' => 'Datasource',
        'guid'       => 'Guid',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->datasource) {
            $res['Datasource'] = $this->datasource;
        }
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Datasource'])) {
            $model->datasource = $map['Datasource'];
        }
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
