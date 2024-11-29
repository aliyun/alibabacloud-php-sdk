<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class cacheTags extends Model
{
    /**
     * @description Specifies whether the matching is not case-sensitive. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $caseInsensitive;

    /**
     * @description The configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description The order in which the rule is executed.
     *
     * @example 1
     *
     * @var string
     */
    public $sequence;

    /**
     * @description The name of the custom cache tag.
     *
     * @example example
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'caseInsensitive' => 'CaseInsensitive',
        'configId'        => 'ConfigId',
        'sequence'        => 'Sequence',
        'tagName'         => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseInsensitive) {
            $res['CaseInsensitive'] = $this->caseInsensitive;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cacheTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaseInsensitive'])) {
            $model->caseInsensitive = $map['CaseInsensitive'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
