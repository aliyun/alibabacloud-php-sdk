<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigVersionDifferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $newConfigXML;

    /**
     * @var string
     */
    public $oldConfigXML;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newConfigXML' => 'NewConfigXML',
        'oldConfigXML' => 'OldConfigXML',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newConfigXML) {
            $res['NewConfigXML'] = $this->newConfigXML;
        }
        if (null !== $this->oldConfigXML) {
            $res['OldConfigXML'] = $this->oldConfigXML;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigVersionDifferenceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewConfigXML'])) {
            $model->newConfigXML = $map['NewConfigXML'];
        }
        if (isset($map['OldConfigXML'])) {
            $model->oldConfigXML = $map['OldConfigXML'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
