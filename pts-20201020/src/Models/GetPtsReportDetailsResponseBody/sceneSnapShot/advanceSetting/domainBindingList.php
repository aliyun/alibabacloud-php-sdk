<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\advanceSetting;

use AlibabaCloud\Dara\Model;

class domainBindingList extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'domain' => 'Domain',
        'ips' => 'Ips',
    ];

    public function validate()
    {
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
