<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponseBody\associatedTransferSetting;

use AlibabaCloud\Tea\Model;

class ruleSettings extends Model
{
    /**
     * @example disk
     *
     * @var string
     */
    public $associatedResourceType;

    /**
     * @example ecs
     *
     * @var string
     */
    public $associatedService;

    /**
     * @example instance
     *
     * @var string
     */
    public $masterResourceType;

    /**
     * @example ecs
     *
     * @var string
     */
    public $masterService;

    /**
     * @example Enable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'associatedResourceType' => 'AssociatedResourceType',
        'associatedService'      => 'AssociatedService',
        'masterResourceType'     => 'MasterResourceType',
        'masterService'          => 'MasterService',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedResourceType) {
            $res['AssociatedResourceType'] = $this->associatedResourceType;
        }
        if (null !== $this->associatedService) {
            $res['AssociatedService'] = $this->associatedService;
        }
        if (null !== $this->masterResourceType) {
            $res['MasterResourceType'] = $this->masterResourceType;
        }
        if (null !== $this->masterService) {
            $res['MasterService'] = $this->masterService;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedResourceType'])) {
            $model->associatedResourceType = $map['AssociatedResourceType'];
        }
        if (isset($map['AssociatedService'])) {
            $model->associatedService = $map['AssociatedService'];
        }
        if (isset($map['MasterResourceType'])) {
            $model->masterResourceType = $map['MasterResourceType'];
        }
        if (isset($map['MasterService'])) {
            $model->masterService = $map['MasterService'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
