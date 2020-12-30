<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\imageResult\result;
use AlibabaCloud\Tea\Model;

class imageResult extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'type'       => 'Type',
        'suggestion' => 'Suggestion',
        'result'     => 'Result',
        'url'        => 'Url',
        'label'      => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
