<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\imageResult\result;
use AlibabaCloud\Tea\Model;

class imageResult extends Model
{
    /**
     * @description The recommendation for review results. Valid values:
     *
     * - **block**
     * - **review**
     * - **pass**
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The URL of the image.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description The results of ad review.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The score.
     *
     * @example cover
     *
     * @var string
     */
    public $type;

    /**
     * @description The type of the image. The value is **cover**.
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
