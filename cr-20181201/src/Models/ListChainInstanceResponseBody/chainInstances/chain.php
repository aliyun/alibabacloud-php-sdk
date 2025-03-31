<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponseBody\chainInstances;

use AlibabaCloud\Dara\Model;

class chain extends Model
{
    /**
     * @var string
     */
    public $chainId;

    /**
     * @var string
     */
    public $chainName;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'chainId' => 'ChainId',
        'chainName' => 'ChainName',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }

        if (null !== $this->chainName) {
            $res['ChainName'] = $this->chainName;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }

        if (isset($map['ChainName'])) {
            $model->chainName = $map['ChainName'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
