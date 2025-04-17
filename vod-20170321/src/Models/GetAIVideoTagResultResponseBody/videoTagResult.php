<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\category;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\keyword;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\location;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\person;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult\time;

class videoTagResult extends Model
{
    /**
     * @var category[]
     */
    public $category;

    /**
     * @var keyword[]
     */
    public $keyword;

    /**
     * @var location[]
     */
    public $location;

    /**
     * @var person[]
     */
    public $person;

    /**
     * @var time[]
     */
    public $time;
    protected $_name = [
        'category' => 'Category',
        'keyword' => 'Keyword',
        'location' => 'Location',
        'person' => 'Person',
        'time' => 'Time',
    ];

    public function validate()
    {
        if (\is_array($this->category)) {
            Model::validateArray($this->category);
        }
        if (\is_array($this->keyword)) {
            Model::validateArray($this->keyword);
        }
        if (\is_array($this->location)) {
            Model::validateArray($this->location);
        }
        if (\is_array($this->person)) {
            Model::validateArray($this->person);
        }
        if (\is_array($this->time)) {
            Model::validateArray($this->time);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            if (\is_array($this->category)) {
                $res['Category'] = [];
                $n1 = 0;
                foreach ($this->category as $item1) {
                    $res['Category'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->keyword) {
            if (\is_array($this->keyword)) {
                $res['Keyword'] = [];
                $n1 = 0;
                foreach ($this->keyword as $item1) {
                    $res['Keyword'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->location) {
            if (\is_array($this->location)) {
                $res['Location'] = [];
                $n1 = 0;
                foreach ($this->location as $item1) {
                    $res['Location'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->person) {
            if (\is_array($this->person)) {
                $res['Person'] = [];
                $n1 = 0;
                foreach ($this->person as $item1) {
                    $res['Person'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->time) {
            if (\is_array($this->time)) {
                $res['Time'] = [];
                $n1 = 0;
                foreach ($this->time as $item1) {
                    $res['Time'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            if (!empty($map['Category'])) {
                $model->category = [];
                $n1 = 0;
                foreach ($map['Category'] as $item1) {
                    $model->category[$n1++] = category::fromMap($item1);
                }
            }
        }

        if (isset($map['Keyword'])) {
            if (!empty($map['Keyword'])) {
                $model->keyword = [];
                $n1 = 0;
                foreach ($map['Keyword'] as $item1) {
                    $model->keyword[$n1++] = keyword::fromMap($item1);
                }
            }
        }

        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = [];
                $n1 = 0;
                foreach ($map['Location'] as $item1) {
                    $model->location[$n1++] = location::fromMap($item1);
                }
            }
        }

        if (isset($map['Person'])) {
            if (!empty($map['Person'])) {
                $model->person = [];
                $n1 = 0;
                foreach ($map['Person'] as $item1) {
                    $model->person[$n1++] = person::fromMap($item1);
                }
            }
        }

        if (isset($map['Time'])) {
            if (!empty($map['Time'])) {
                $model->time = [];
                $n1 = 0;
                foreach ($map['Time'] as $item1) {
                    $model->time[$n1++] = time::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
