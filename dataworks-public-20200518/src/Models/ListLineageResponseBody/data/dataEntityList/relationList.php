<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data\dataEntityList;

use AlibabaCloud\Tea\Model;

class relationList extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $datasource;

    /**
     * @var string
     */
    public $guid;

    /**
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
