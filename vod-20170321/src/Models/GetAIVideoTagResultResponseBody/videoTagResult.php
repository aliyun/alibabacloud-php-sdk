<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\keyword;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\location;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\person;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\time;
use AlibabaCloud\Tea\Model;

class videoTagResult extends Model
{
    /**
     * @var time[]
     */
    public $time;

    /**
     * @var keyword[]
     */
    public $keyword;

    /**
     * @var category[]
     */
    public $category;

    /**
     * @var person[]
     */
    public $person;

    /**
     * @var location[]
     */
    public $location;
    protected $_name = [
        'time'     => 'Time',
        'keyword'  => 'Keyword',
        'category' => 'Category',
        'person'   => 'Person',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = [];
            if (null !== $this->time && \is_array($this->time)) {
                $n = 0;
                foreach ($this->time as $item) {
                    $res['Time'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = [];
            if (null !== $this->keyword && \is_array($this->keyword)) {
                $n = 0;
                foreach ($this->keyword as $item) {
                    $res['Keyword'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->category) {
            $res['Category'] = [];
            if (null !== $this->category && \is_array($this->category)) {
                $n = 0;
                foreach ($this->category as $item) {
                    $res['Category'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->person) {
            $res['Person'] = [];
            if (null !== $this->person && \is_array($this->person)) {
                $n = 0;
                foreach ($this->person as $item) {
                    $res['Person'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['Location'] = [];
            if (null !== $this->location && \is_array($this->location)) {
                $n = 0;
                foreach ($this->location as $item) {
                    $res['Location'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoTagResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            if (!empty($map['Time'])) {
                $model->time = [];
                $n           = 0;
                foreach ($map['Time'] as $item) {
                    $model->time[$n++] = null !== $item ? time::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Keyword'])) {
            if (!empty($map['Keyword'])) {
                $model->keyword = [];
                $n              = 0;
                foreach ($map['Keyword'] as $item) {
                    $model->keyword[$n++] = null !== $item ? keyword::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Category'])) {
            if (!empty($map['Category'])) {
                $model->category = [];
                $n               = 0;
                foreach ($map['Category'] as $item) {
                    $model->category[$n++] = null !== $item ? category::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Person'])) {
            if (!empty($map['Person'])) {
                $model->person = [];
                $n             = 0;
                foreach ($map['Person'] as $item) {
                    $model->person[$n++] = null !== $item ? person::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = [];
                $n               = 0;
                foreach ($map['Location'] as $item) {
                    $model->location[$n++] = null !== $item ? location::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
