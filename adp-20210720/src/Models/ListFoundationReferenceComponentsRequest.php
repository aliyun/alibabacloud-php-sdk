<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListFoundationReferenceComponentsRequest extends Model
{
    /**
     * @example d5246b4b-b058-41df-84d0-xxx
     *
     * @var string
     */
    public $foundationReferenceUID;

    /**
     * @example 4686a7d7-04b4-4101-9466-xxx
     *
     * @var string
     */
    public $foundationVersionUID;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyEnabled;

    /**
     * @var string
     */
    public $parentComponentReferenceUID;

    /**
     * @example c67144dc-92a2-4269-a886-xxx
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'foundationReferenceUID'      => 'foundationReferenceUID',
        'foundationVersionUID'        => 'foundationVersionUID',
        'onlyEnabled'                 => 'onlyEnabled',
        'parentComponentReferenceUID' => 'parentComponentReferenceUID',
        'productVersionUID'           => 'productVersionUID',
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
        if (null !== $this->foundationVersionUID) {
            $res['foundationVersionUID'] = $this->foundationVersionUID;
        }
        if (null !== $this->onlyEnabled) {
            $res['onlyEnabled'] = $this->onlyEnabled;
        }
        if (null !== $this->parentComponentReferenceUID) {
            $res['parentComponentReferenceUID'] = $this->parentComponentReferenceUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFoundationReferenceComponentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['foundationReferenceUID'])) {
            $model->foundationReferenceUID = $map['foundationReferenceUID'];
        }
        if (isset($map['foundationVersionUID'])) {
            $model->foundationVersionUID = $map['foundationVersionUID'];
        }
        if (isset($map['onlyEnabled'])) {
            $model->onlyEnabled = $map['onlyEnabled'];
        }
        if (isset($map['parentComponentReferenceUID'])) {
            $model->parentComponentReferenceUID = $map['parentComponentReferenceUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
