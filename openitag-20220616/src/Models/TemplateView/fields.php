<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateView;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateView\fields\visitInfo;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @example True
     *
     * @var bool
     */
    public $displayOriImg;

    /**
     * @example url
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example IMG
     *
     * @var string
     */
    public $type;

    /**
     * @var visitInfo
     */
    public $visitInfo;
    protected $_name = [
        'displayOriImg' => 'DisplayOriImg',
        'fieldName'     => 'FieldName',
        'type'          => 'Type',
        'visitInfo'     => 'VisitInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayOriImg) {
            $res['DisplayOriImg'] = $this->displayOriImg;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->visitInfo) {
            $res['VisitInfo'] = null !== $this->visitInfo ? $this->visitInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayOriImg'])) {
            $model->displayOriImg = $map['DisplayOriImg'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VisitInfo'])) {
            $model->visitInfo = visitInfo::fromMap($map['VisitInfo']);
        }

        return $model;
    }
}
