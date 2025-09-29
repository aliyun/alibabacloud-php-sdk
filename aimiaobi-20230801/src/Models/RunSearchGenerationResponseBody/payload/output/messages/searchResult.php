<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult\audios;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult\images;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult\texts;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\messages\searchResult\videos;

class searchResult extends Model
{
    /**
     * @var audios[]
     */
    public $audios;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $multimodalSearchQuery;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @var videos[]
     */
    public $videos;
    protected $_name = [
        'audios' => 'Audios',
        'images' => 'Images',
        'multimodalSearchQuery' => 'MultimodalSearchQuery',
        'texts' => 'Texts',
        'videos' => 'Videos',
    ];

    public function validate()
    {
        if (\is_array($this->audios)) {
            Model::validateArray($this->audios);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        if (\is_array($this->videos)) {
            Model::validateArray($this->videos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audios) {
            if (\is_array($this->audios)) {
                $res['Audios'] = [];
                $n1 = 0;
                foreach ($this->audios as $item1) {
                    $res['Audios'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->multimodalSearchQuery) {
            $res['MultimodalSearchQuery'] = $this->multimodalSearchQuery;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videos) {
            if (\is_array($this->videos)) {
                $res['Videos'] = [];
                $n1 = 0;
                foreach ($this->videos as $item1) {
                    $res['Videos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Audios'])) {
            if (!empty($map['Audios'])) {
                $model->audios = [];
                $n1 = 0;
                foreach ($map['Audios'] as $item1) {
                    $model->audios[$n1] = audios::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = images::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MultimodalSearchQuery'])) {
            $model->multimodalSearchQuery = $map['MultimodalSearchQuery'];
        }

        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1] = texts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Videos'])) {
            if (!empty($map['Videos'])) {
                $model->videos = [];
                $n1 = 0;
                foreach ($map['Videos'] as $item1) {
                    $model->videos[$n1] = videos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
