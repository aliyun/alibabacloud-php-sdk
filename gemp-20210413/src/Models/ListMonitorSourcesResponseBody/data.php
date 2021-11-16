<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListMonitorSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $fieldKeys;

    /**
     * @var int
     */
    public $monitorSourceId;

    /**
     * @var string
     */
    public $monitorSourceName;
    protected $_name = [
        'fieldKeys'         => 'fieldKeys',
        'monitorSourceId'   => 'monitorSourceId',
        'monitorSourceName' => 'monitorSourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldKeys) {
            $res['fieldKeys'] = $this->fieldKeys;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldKeys'])) {
            if (!empty($map['fieldKeys'])) {
                $model->fieldKeys = $map['fieldKeys'];
            }
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }

        return $model;
    }
}
