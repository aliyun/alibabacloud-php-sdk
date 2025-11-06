<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\jurDesc;

class claim extends Model
{
    /**
     * @var classDescs
     */
    public $classDescs;

    /**
     * @var contacts
     */
    public $contacts;

    /**
     * @var string
     */
    public $goodsAndServices;

    /**
     * @var holders
     */
    public $holders;

    /**
     * @var jurDesc
     */
    public $jurDesc;

    /**
     * @var string
     */
    public $markName;
    protected $_name = [
        'classDescs' => 'ClassDescs',
        'contacts' => 'Contacts',
        'goodsAndServices' => 'GoodsAndServices',
        'holders' => 'Holders',
        'jurDesc' => 'JurDesc',
        'markName' => 'MarkName',
    ];

    public function validate()
    {
        if (null !== $this->classDescs) {
            $this->classDescs->validate();
        }
        if (null !== $this->contacts) {
            $this->contacts->validate();
        }
        if (null !== $this->holders) {
            $this->holders->validate();
        }
        if (null !== $this->jurDesc) {
            $this->jurDesc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classDescs) {
            $res['ClassDescs'] = null !== $this->classDescs ? $this->classDescs->toArray($noStream) : $this->classDescs;
        }

        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toArray($noStream) : $this->contacts;
        }

        if (null !== $this->goodsAndServices) {
            $res['GoodsAndServices'] = $this->goodsAndServices;
        }

        if (null !== $this->holders) {
            $res['Holders'] = null !== $this->holders ? $this->holders->toArray($noStream) : $this->holders;
        }

        if (null !== $this->jurDesc) {
            $res['JurDesc'] = null !== $this->jurDesc ? $this->jurDesc->toArray($noStream) : $this->jurDesc;
        }

        if (null !== $this->markName) {
            $res['MarkName'] = $this->markName;
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
        if (isset($map['ClassDescs'])) {
            $model->classDescs = classDescs::fromMap($map['ClassDescs']);
        }

        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }

        if (isset($map['GoodsAndServices'])) {
            $model->goodsAndServices = $map['GoodsAndServices'];
        }

        if (isset($map['Holders'])) {
            $model->holders = holders::fromMap($map['Holders']);
        }

        if (isset($map['JurDesc'])) {
            $model->jurDesc = jurDesc::fromMap($map['JurDesc']);
        }

        if (isset($map['MarkName'])) {
            $model->markName = $map['MarkName'];
        }

        return $model;
    }
}
