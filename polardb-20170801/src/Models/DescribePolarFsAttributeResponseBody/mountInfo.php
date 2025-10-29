<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class mountInfo extends Model
{
    /**
     * @var string
     */
    public $polarDbProxy;

    /**
     * @var string
     */
    public $polarFsCluster;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'polarDbProxy' => 'PolarDbProxy',
        'polarFsCluster' => 'PolarFsCluster',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polarDbProxy) {
            $res['PolarDbProxy'] = $this->polarDbProxy;
        }

        if (null !== $this->polarFsCluster) {
            $res['PolarFsCluster'] = $this->polarFsCluster;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['PolarDbProxy'])) {
            $model->polarDbProxy = $map['PolarDbProxy'];
        }

        if (isset($map['PolarFsCluster'])) {
            $model->polarFsCluster = $map['PolarFsCluster'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
