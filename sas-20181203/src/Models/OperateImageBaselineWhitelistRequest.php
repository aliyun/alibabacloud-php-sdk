<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateImageBaselineWhitelistRequest extends Model
{
    /**
     * @example hc.image.checklist.identify.hc_exploit_es_linux.item
     *
     * @var string
     */
    public $baselineItemKeyList;

    /**
     * @example a5250ebca765dc9eb1a84b790b0e****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example add
     *
     * @var string
     */
    public $operation;

    /**
     * @var string[]
     */
    public $scanRange;
    protected $_name = [
        'baselineItemKeyList' => 'BaselineItemKeyList',
        'imageUuid'           => 'ImageUuid',
        'lang'                => 'Lang',
        'operation'           => 'Operation',
        'scanRange'           => 'ScanRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemKeyList) {
            $res['BaselineItemKeyList'] = $this->baselineItemKeyList;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateImageBaselineWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemKeyList'])) {
            $model->baselineItemKeyList = $map['BaselineItemKeyList'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }

        return $model;
    }
}
