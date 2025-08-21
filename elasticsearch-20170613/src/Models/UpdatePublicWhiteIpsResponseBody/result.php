<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicWhiteIpsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $publicIpWhitelist;
    protected $_name = [
        'publicIpWhitelist' => 'publicIpWhitelist',
    ];

    public function validate()
    {
        if (\is_array($this->publicIpWhitelist)) {
            Model::validateArray($this->publicIpWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIpWhitelist) {
            if (\is_array($this->publicIpWhitelist)) {
                $res['publicIpWhitelist'] = [];
                $n1 = 0;
                foreach ($this->publicIpWhitelist as $item1) {
                    $res['publicIpWhitelist'][$n1] = $item1;
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
        if (isset($map['publicIpWhitelist'])) {
            if (!empty($map['publicIpWhitelist'])) {
                $model->publicIpWhitelist = [];
                $n1 = 0;
                foreach ($map['publicIpWhitelist'] as $item1) {
                    $model->publicIpWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
