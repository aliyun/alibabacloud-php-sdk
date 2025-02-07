<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
