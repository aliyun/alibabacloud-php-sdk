<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNALibsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNALibsResponseBody\AIDNALibInfoList\AIDNALibInfo;

class AIDNALibInfoList extends Model
{
    /**
     * @var AIDNALibInfo[]
     */
    public $AIDNALibInfo;
    protected $_name = [
        'AIDNALibInfo' => 'AIDNALibInfo',
    ];

    public function validate()
    {
        if (\is_array($this->AIDNALibInfo)) {
            Model::validateArray($this->AIDNALibInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIDNALibInfo) {
            if (\is_array($this->AIDNALibInfo)) {
                $res['AIDNALibInfo'] = [];
                $n1 = 0;
                foreach ($this->AIDNALibInfo as $item1) {
                    $res['AIDNALibInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIDNALibInfo'])) {
            if (!empty($map['AIDNALibInfo'])) {
                $model->AIDNALibInfo = [];
                $n1 = 0;
                foreach ($map['AIDNALibInfo'] as $item1) {
                    $model->AIDNALibInfo[$n1] = AIDNALibInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
