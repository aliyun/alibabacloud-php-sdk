<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutExporterOutputRequest extends Model
{
    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $configJson;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $destType;
    protected $_name = [
        'destName'   => 'DestName',
        'configJson' => 'ConfigJson',
        'desc'       => 'Desc',
        'destType'   => 'DestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutExporterOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        return $model;
    }
}
