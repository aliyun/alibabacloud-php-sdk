<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

class data extends Model
{
    /**
     * @var warningConfigInfo[]
     */
    public $warningConfigInfo;
    protected $_name = [
        'warningConfigInfo' => 'WarningConfigInfo',
    ];

    public function validate()
    {
        if (\is_array($this->warningConfigInfo)) {
            Model::validateArray($this->warningConfigInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warningConfigInfo) {
            if (\is_array($this->warningConfigInfo)) {
                $res['WarningConfigInfo'] = [];
                $n1 = 0;
                foreach ($this->warningConfigInfo as $item1) {
                    $res['WarningConfigInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WarningConfigInfo'])) {
            if (!empty($map['WarningConfigInfo'])) {
                $model->warningConfigInfo = [];
                $n1 = 0;
                foreach ($map['WarningConfigInfo'] as $item1) {
                    $model->warningConfigInfo[$n1] = warningConfigInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
