<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListBackupsResponseBody\items\item;

use AlibabaCloud\Tea\Model;

class metadataInfo extends Model
{
    /**
     * @var string
     */
    public $metadataType;

    /**
     * @var string
     */
    public $properties;
    protected $_name = [
        'metadataType' => 'MetadataType',
        'properties'   => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadataType) {
            $res['MetadataType'] = $this->metadataType;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetadataType'])) {
            $model->metadataType = $map['MetadataType'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
