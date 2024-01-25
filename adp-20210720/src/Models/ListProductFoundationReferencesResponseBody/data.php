<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductFoundationReferencesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example b1b528a6-8341-4f06-89af-xxxxxxxxxxxx
     *
     * @var string
     */
    public $foundationReferenceUID;

    /**
     * @example 1.4.3
     *
     * @var string
     */
    public $foundationVersion;

    /**
     * @var string
     */
    public $foundationVersionName;

    /**
     * @example trident
     *
     * @var string
     */
    public $foundationVersionType;

    /**
     * @example 796f9044-8684-4de5-9b12-xxxxxxxxxxxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'foundationReferenceUID' => 'foundationReferenceUID',
        'foundationVersion'      => 'foundationVersion',
        'foundationVersionName'  => 'foundationVersionName',
        'foundationVersionType'  => 'foundationVersionType',
        'foundationVersionUID'   => 'foundationVersionUID',
        'productVersionUID'      => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->foundationReferenceUID) {
            $res['foundationReferenceUID'] = $this->foundationReferenceUID;
        }
        if (null !== $this->foundationVersion) {
            $res['foundationVersion'] = $this->foundationVersion;
        }
        if (null !== $this->foundationVersionName) {
            $res['foundationVersionName'] = $this->foundationVersionName;
        }
        if (null !== $this->foundationVersionType) {
            $res['foundationVersionType'] = $this->foundationVersionType;
        }
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['foundationReferenceUID'])) {
            $model->foundationReferenceUID = $map['foundationReferenceUID'];
        }
        if (isset($map['foundationVersion'])) {
            $model->foundationVersion = $map['foundationVersion'];
        }
        if (isset($map['foundationVersionName'])) {
            $model->foundationVersionName = $map['foundationVersionName'];
        }
        if (isset($map['foundationVersionType'])) {
            $model->foundationVersionType = $map['foundationVersionType'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
