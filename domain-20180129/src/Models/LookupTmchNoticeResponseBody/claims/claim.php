<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\jurDesc;
use AlibabaCloud\Tea\Model;

class claim extends Model
{
    /**
     * @var string
     */
    public $goodsAndServices;

    /**
     * @var contacts
     */
    public $contacts;

    /**
     * @var string
     */
    public $markName;

    /**
     * @var classDescs
     */
    public $classDescs;

    /**
     * @var holders
     */
    public $holders;

    /**
     * @var jurDesc
     */
    public $jurDesc;
    protected $_name = [
        'goodsAndServices' => 'GoodsAndServices',
        'contacts'         => 'Contacts',
        'markName'         => 'MarkName',
        'classDescs'       => 'ClassDescs',
        'holders'          => 'Holders',
        'jurDesc'          => 'JurDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodsAndServices) {
            $res['GoodsAndServices'] = $this->goodsAndServices;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->markName) {
            $res['MarkName'] = $this->markName;
        }
        if (null !== $this->classDescs) {
            $res['ClassDescs'] = null !== $this->classDescs ? $this->classDescs->toMap() : null;
        }
        if (null !== $this->holders) {
            $res['Holders'] = null !== $this->holders ? $this->holders->toMap() : null;
        }
        if (null !== $this->jurDesc) {
            $res['JurDesc'] = null !== $this->jurDesc ? $this->jurDesc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return claim
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsAndServices'])) {
            $model->goodsAndServices = $map['GoodsAndServices'];
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['MarkName'])) {
            $model->markName = $map['MarkName'];
        }
        if (isset($map['ClassDescs'])) {
            $model->classDescs = classDescs::fromMap($map['ClassDescs']);
        }
        if (isset($map['Holders'])) {
            $model->holders = holders::fromMap($map['Holders']);
        }
        if (isset($map['JurDesc'])) {
            $model->jurDesc = jurDesc::fromMap($map['JurDesc']);
        }

        return $model;
    }
}
