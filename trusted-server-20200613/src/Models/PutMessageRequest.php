<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class PutMessageRequest extends Model
{
    /**
     * @example <quote>
     * <data>
     * <aik_cert>LS0tLS1C********LS0tLS0K</aik_cert>
     * <quote_message>/1RDR4AY********2kaJ6w==</quote_message>
     * <quote_signature>Tn5nuDQe********xNtnQw==</quote_signature>
     * <pcr_list>Mo1hSigO********v3Trjsc=</pcr_list>
     * <ima_list>CgAAAN7G********AAAAAAA=</ima_list>
     * <user>
     * <property_uuid>0f74b5cc-ff0e-4fa6-b457-1dc58072****</property_uuid>
     * </quote>
     * @var string
     */
    public $fileData;

    /**
     * @example 0f74b5cc-ff0e-4fa6-b457-1dc58072****
     *
     * @var string
     */
    public $propertyUuid;
    protected $_name = [
        'fileData'     => 'FileData',
        'propertyUuid' => 'PropertyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileData) {
            $res['FileData'] = $this->fileData;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileData'])) {
            $model->fileData = $map['FileData'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }

        return $model;
    }
}
