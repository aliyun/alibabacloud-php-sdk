<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class RenameBlockchainRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $newName;
    protected $_name = [
        'bizid'   => 'Bizid',
        'newName' => 'NewName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenameBlockchainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }

        return $model;
    }
}
