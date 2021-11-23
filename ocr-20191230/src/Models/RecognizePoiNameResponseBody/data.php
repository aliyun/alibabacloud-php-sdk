<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\signboards;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\summary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var signboards[]
     */
    public $signboards;

    /**
     * @var summary
     */
    public $summary;
    protected $_name = [
        'signboards' => 'Signboards',
        'summary'    => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signboards) {
            $res['Signboards'] = [];
            if (null !== $this->signboards && \is_array($this->signboards)) {
                $n = 0;
                foreach ($this->signboards as $item) {
                    $res['Signboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signboards'])) {
            if (!empty($map['Signboards'])) {
                $model->signboards = [];
                $n                 = 0;
                foreach ($map['Signboards'] as $item) {
                    $model->signboards[$n++] = null !== $item ? signboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        return $model;
    }
}
