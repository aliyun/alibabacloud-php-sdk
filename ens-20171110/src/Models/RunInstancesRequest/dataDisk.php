<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest;

use AlibabaCloud\Dara\Model;

class dataDisk extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'encrypted' => 'Encrypted',
        'KMSKeyId' => 'KMSKeyId',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
