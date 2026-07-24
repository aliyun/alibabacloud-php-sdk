<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListSupportedConnectorsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connector;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sinkSql;

    /**
     * @var string
     */
    public $sourceSql;
    protected $_name = [
        'connector' => 'Connector',
        'description' => 'Description',
        'iconUrl' => 'IconUrl',
        'name' => 'Name',
        'sinkSql' => 'SinkSql',
        'sourceSql' => 'SourceSql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connector) {
            $res['Connector'] = $this->connector;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sinkSql) {
            $res['SinkSql'] = $this->sinkSql;
        }

        if (null !== $this->sourceSql) {
            $res['SourceSql'] = $this->sourceSql;
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
        if (isset($map['Connector'])) {
            $model->connector = $map['Connector'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SinkSql'])) {
            $model->sinkSql = $map['SinkSql'];
        }

        if (isset($map['SourceSql'])) {
            $model->sourceSql = $map['SourceSql'];
        }

        return $model;
    }
}
