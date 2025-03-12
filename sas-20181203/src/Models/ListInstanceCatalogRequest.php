<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceCatalogRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the region in which the asset resides. Valid values:
     *
     *   **cn-hangzhou**: International
     *   **ap-southeast-1**: Singapore
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of requirement items.
     *
     * @var int[]
     */
    public $requirementIds;

    /**
     * @description The IDs of standards.
     *
     * @var int[]
     */
    public $standardIds;

    /**
     * @description The types of check standards.
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'lang'           => 'Lang',
        'regionId'       => 'RegionId',
        'requirementIds' => 'RequirementIds',
        'standardIds'    => 'StandardIds',
        'types'          => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requirementIds) {
            $res['RequirementIds'] = $this->requirementIds;
        }
        if (null !== $this->standardIds) {
            $res['StandardIds'] = $this->standardIds;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequirementIds'])) {
            if (!empty($map['RequirementIds'])) {
                $model->requirementIds = $map['RequirementIds'];
            }
        }
        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = $map['StandardIds'];
            }
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
