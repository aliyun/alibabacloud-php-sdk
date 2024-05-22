<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The category of the disk. Valid values:
     *
     *   **cloud_efficiency**: ultra disk.
     *   **cloud_ssd**: all-flash disk.
     *   **local_hdd**: local HDD.
     *   **local_ssd**: local SSD.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used for the disk. Valid values:
     *
     *   true
     *   false (default)
     *
     * >  If you set the Encrypted parameter to true, the default service key is used when the KMSKeyId parameter is empty.
     * @example false
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The size of a data disk. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'  => 'Category',
        'encrypted' => 'Encrypted',
        'KMSKeyId'  => 'KMSKeyId',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataDisk
     */
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
