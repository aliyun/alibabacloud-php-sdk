<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim\classDescs;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim\contacts;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim\holders;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\LookupTmchNoticeResponseBody\claims\claim\jurDesc;
use AlibabaCloud\Tea\Model;

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
        'classDescs'       => 'ClassDescs',
        'contacts'         => 'Contacts',
        'goodsAndServices' => 'GoodsAndServices',
        'holders'          => 'Holders',
        'jurDesc'          => 'JurDesc',
        'markName'         => 'MarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classDescs) {
            $res['ClassDescs'] = null !== $this->classDescs ? $this->classDescs->toMap() : null;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->goodsAndServices) {
            $res['GoodsAndServices'] = $this->goodsAndServices;
        }
        if (null !== $this->holders) {
            $res['Holders'] = null !== $this->holders ? $this->holders->toMap() : null;
        }
        if (null !== $this->jurDesc) {
            $res['JurDesc'] = null !== $this->jurDesc ? $this->jurDesc->toMap() : null;
        }
        if (null !== $this->markName) {
            $res['MarkName'] = $this->markName;
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
