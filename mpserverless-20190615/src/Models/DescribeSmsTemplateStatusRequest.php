<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmsTemplateStatusRequest extends Model
{
    /**
     * @var string
     */
    public $templateCodes;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'templateCodes' => 'TemplateCodes',
        'spaceId'       => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateCodes) {
            $res['TemplateCodes'] = $this->templateCodes;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmsTemplateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateCodes'])) {
            $model->templateCodes = $map['TemplateCodes'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
