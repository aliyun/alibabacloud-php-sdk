<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteFaceRecordV2ResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $deleted;

    /**
     * @var string
     */
    public $deletedGroupCodes;
    protected $_name = [
        'deleted' => 'Deleted',
        'deletedGroupCodes' => 'DeletedGroupCodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->deletedGroupCodes) {
            $res['DeletedGroupCodes'] = $this->deletedGroupCodes;
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
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['DeletedGroupCodes'])) {
            $model->deletedGroupCodes = $map['DeletedGroupCodes'];
        }

        return $model;
    }
}
