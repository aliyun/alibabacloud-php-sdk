<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysResponseBody\smartAccessGateways;

use AlibabaCloud\Tea\Model;

class smartAccessGateway extends Model
{
    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $smartAGUid;
    protected $_name = [
        'smartAGId'  => 'SmartAGId',
        'name'       => 'Name',
        'smartAGUid' => 'SmartAGUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->smartAGUid) {
            $res['SmartAGUid'] = $this->smartAGUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartAccessGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SmartAGUid'])) {
            $model->smartAGUid = $map['SmartAGUid'];
        }

        return $model;
    }
}
