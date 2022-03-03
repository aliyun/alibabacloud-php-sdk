<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponseBody;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponseBody\data\listPsimCards;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponseBody\data\vsimCardInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var listPsimCards[]
     */
    public $listPsimCards;

    /**
     * @var vsimCardInfo
     */
    public $vsimCardInfo;
    protected $_name = [
        'listPsimCards' => 'ListPsimCards',
        'vsimCardInfo'  => 'VsimCardInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listPsimCards) {
            $res['ListPsimCards'] = [];
            if (null !== $this->listPsimCards && \is_array($this->listPsimCards)) {
                $n = 0;
                foreach ($this->listPsimCards as $item) {
                    $res['ListPsimCards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vsimCardInfo) {
            $res['VsimCardInfo'] = null !== $this->vsimCardInfo ? $this->vsimCardInfo->toMap() : null;
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
        if (isset($map['ListPsimCards'])) {
            if (!empty($map['ListPsimCards'])) {
                $model->listPsimCards = [];
                $n                    = 0;
                foreach ($map['ListPsimCards'] as $item) {
                    $model->listPsimCards[$n++] = null !== $item ? listPsimCards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VsimCardInfo'])) {
            $model->vsimCardInfo = vsimCardInfo::fromMap($map['VsimCardInfo']);
        }

        return $model;
    }
}
