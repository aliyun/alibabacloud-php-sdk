<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListCustomTemplatesRequest extends Model
{
    /**
     * @description The template name.
     *
     * @example test-template
     *
     * @var string
     */
    public $name;

    /**
     * @description The order in which the entries are sorted. Valid values:
     *
     *   CreateTimeDesc: sorted by creation time in descending order.
     *   CreateTimeAsc: sorted by creation time in ascending order.
     *
     * @example CreateTimeDesc
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The subtype ID of the template.
     *
     *   Valid values for transcoding templates:
     *
     *   1 (Normal): regular template.
     *   2 (AudioTranscode): audio transcoding template.
     *   3 (Remux): container format conversion template.
     *   4 (NarrowBandV1): Narrowband HD 1.0 template.
     *   5 (NarrowBandV2): Narrowband HD 2.0 template.
     *
     *   Valid values for snapshot templates:
     *
     *   1 (Normal): regular template.
     *   2 (Sprite): sprite template.
     *   3 (WebVtt): WebVTT template.
     *
     *   Valid values for AI-assisted content moderation templates:
     *
     *   1 (Video): video moderation template.
     *   2 (Audio): audio moderation template.
     *   3 (Image): image moderation template.
     *
     *   Valid values for AI-assisted intelligent erasure templates:
     *
     *   1 (VideoDelogo): logo erasure template.
     *   2 (VideoDetext): subtitle erasure template.
     *
     * @example 2
     *
     * @var string
     */
    public $subtype;

    /**
     * @description The template ID.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template type. Valid values:
     *
     *   1: transcoding template.
     *   2: snapshot template.
     *   3: animated image template.
     *   4\\. image watermark template.
     *   5: text watermark template.
     *   6: subtitle template.
     *   7: AI-assisted content moderation template.
     *   8: AI-assisted intelligent thumbnail template.
     *   9: AI-assisted intelligent erasure template.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'       => 'Name',
        'orderBy'    => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'subtype'    => 'Subtype',
        'templateId' => 'TemplateId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
