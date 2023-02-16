<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus;

use AlibabaCloud\Tea\Model;

class failReasonList extends Model
{
    /**
     * @example This account has a payer account. Please release the financial relationship of this account first.
     *
     * @var string
     */
    public $description;

    /**
     * @example Others
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failReasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
