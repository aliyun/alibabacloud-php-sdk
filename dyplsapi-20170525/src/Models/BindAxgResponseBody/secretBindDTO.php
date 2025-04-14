<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxgResponseBody;

use AlibabaCloud\Dara\Model;

class secretBindDTO extends Model
{
    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $secretNo;

    /**
     * @var string
     */
    public $subsId;
    protected $_name = [
        'extension' => 'Extension',
        'secretNo' => 'SecretNo',
        'subsId' => 'SubsId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }

        if (null !== $this->subsId) {
            $res['SubsId'] = $this->subsId;
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }

        if (isset($map['SubsId'])) {
            $model->subsId = $map['SubsId'];
        }

        return $model;
    }
}
