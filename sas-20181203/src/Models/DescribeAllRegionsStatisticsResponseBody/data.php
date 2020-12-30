<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllRegionsStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $account;

    /**
     * @var int
     */
    public $vul;

    /**
     * @var int
     */
    public $health;

    /**
     * @var int
     */
    public $trojan;

    /**
     * @var int
     */
    public $newSuspicious;

    /**
     * @var int
     */
    public $suspicious;
    protected $_name = [
        'account'       => 'Account',
        'vul'           => 'Vul',
        'health'        => 'Health',
        'trojan'        => 'Trojan',
        'newSuspicious' => 'NewSuspicious',
        'suspicious'    => 'Suspicious',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }
        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }
        if (null !== $this->trojan) {
            $res['Trojan'] = $this->trojan;
        }
        if (null !== $this->newSuspicious) {
            $res['NewSuspicious'] = $this->newSuspicious;
        }
        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }
        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }
        if (isset($map['Trojan'])) {
            $model->trojan = $map['Trojan'];
        }
        if (isset($map['NewSuspicious'])) {
            $model->newSuspicious = $map['NewSuspicious'];
        }
        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }

        return $model;
    }
}
