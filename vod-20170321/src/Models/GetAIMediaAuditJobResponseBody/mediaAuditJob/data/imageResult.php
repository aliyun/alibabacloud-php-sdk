<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\imageResult\result;
use AlibabaCloud\Tea\Model;

class imageResult extends Model
{
    /**
     * @description The error code. This parameter is returned if the value of Status is fail.
     *
     * @example normal
     *
     * @var string
     */
    public $label;

    /**
     * @description The results of terrorism content review.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The categories of the review results and the number of images.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The information about the image with the highest score of the category that is indicated by Label.
     *
     * @example cover
     *
     * @var string
     */
    public $type;

    /**
     * @description The score of the image of the category that is indicated by Label.
     *
     * @example http://www.test.com/****.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'label'      => 'Label',
        'result'     => 'Result',
        'suggestion' => 'Suggestion',
        'type'       => 'Type',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
