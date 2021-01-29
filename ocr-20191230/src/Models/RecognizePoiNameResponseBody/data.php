<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\signboards;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePoiNameResponseBody\data\summary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var summary
     */
    public $summary;

    /**
     * @var signboards[]
     */
    public $signboards;
    protected $_name = [
        'summary'    => 'Summary',
        'signboards' => 'Signboards',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }
        if (null !== $this->signboards) {
            $res['Signboards'] = [];
            if (null !== $this->signboards && \is_array($this->signboards)) {
                $n = 0;
                foreach ($this->signboards as $item) {
                    $res['Signboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }
        if (isset($map['Signboards'])) {
            if (!empty($map['Signboards'])) {
                $model->signboards = [];
                $n                 = 0;
                foreach ($map['Signboards'] as $item) {
                    $model->signboards[$n++] = null !== $item ? signboards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
